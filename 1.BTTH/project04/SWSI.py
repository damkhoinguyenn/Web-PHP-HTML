import pandas as pd
import numpy as np
import scipy.stats as stats
import openpyxl.workbook


def read_excel(filename, usecols):
    my_sheets = pd.read_csv(filename, na_filter=True, skiprows=[0], index_col=[0], usecols=usecols)
    my_sheets = my_sheets.replace(to_replace=r',', value='.', regex=True)
    max_data = my_sheets.max().max()
    data = {}

    for i in my_sheets:
        # print(i)
        data["Năm"] = list(map(lambda x: int(x), my_sheets.index))
        data[i] = list(map(lambda x: float(x), my_sheets[i].values))

    return data, max_data


def weight_bc(data_rain, data_strm):
    bi = {}
    ci = {}
    for i, j in zip(data_rain, data_strm):
        if (i == "Năm" or j == "Năm"):
            continue
        fbi = data_rain[i] / max_rain
        fci = data_strm[j] / max_strm
        bi[i] = np.round(np.array(fbi / (fbi + fci)), 2)
        ci[i] = np.round(np.array(fci / (fbi + fci)), 2)
    return bi, ci


def gamma_distribution(data_rain, data_strm):
    Prain = {}
    Pstrm = {}
    for i, j in zip(data_rain, data_strm):
        if (i == "Năm" or j == ['Năm']):
            continue
        fit_alpha, fit_loc, fit_beta = stats.gamma.fit(np.array(data_rain[i]), floc=0)
        # print(fit_alpha, fit_loc, fit_beta)
        Prain[i] = stats.gamma.cdf(data_rain[i], fit_alpha, fit_loc, fit_beta) * 100
        fit_alpha, fit_loc, fit_beta = stats.gamma.fit(data_strm[j], floc=0)
        Pstrm[i] = stats.gamma.cdf(data_strm[j], fit_alpha, fit_loc, fit_beta) * 100

    return Prain, Pstrm


def SWSI(bi, ci, Prain, Pstrm):
    SWSI = {}
    for i in Prain:
        SWSI[i] = (bi[i] * Prain[i] + ci[i] * Pstrm[i] - 50) / 12
    return SWSI


def to_excel(SWSI, index):
    sheet_1 = {}
    sheet_2 = {}
    date, month, swsi, swsi_negative, swsi_plus = [], [], [], [], []
    for i in range(len(index)):
        for j in SWSI:
            date.append(index[i])
            month.append(j[1:])
            swsi.append(SWSI[j][i])
            if (SWSI[j][i] < 0):
                swsi_negative.append(SWSI[j][i])
                swsi_plus.append(0.0)
            elif (SWSI[j][i] > 0):
                swsi_negative.append(0.0)
                swsi_plus.append(SWSI[j][i])

    sheet_2["Năm"], sheet_2["Tháng"], sheet_2["SWSI"], sheet_2["SWSI (-)"], sheet_2[
        "SWSI (+)"] = date, month, swsi, swsi_negative, swsi_plus
    sheet_1["Năm"] = index
    sheet_1.update(SWSI)
    writer = pd.ExcelWriter('media/R/SWSI.xlsx')
    pd.DataFrame(sheet_1).to_excel(writer, 'SWSI_1995-2018', index=False)
    pd.DataFrame(sheet_2).to_excel(writer, 'SWSI_1995-2018_col', index=False)
    writer.save()


