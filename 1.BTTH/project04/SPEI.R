library(SPEI)
library(readxl)
library(zoo)
myArgs <- commandArgs(trailingOnly = TRUE)

sheet_data <- read_excel(myArgs[1], sheet = myArgs[2])

year <- sheet_data$Year
month<-sheet_data$Month
year_month <- paste(year, month, sep="-")
sheet_data <- ts(sheet_data[,-c(1,2)], end=c(2018,12), frequency=12)
#plot(sheet_data)
sheet_data = as.data.frame(sheet_data)

#Tinh toan cac gia tri
sheet_data$PET   <- hargreaves(Tmin = sheet_data$Tmin,Tmax = sheet_data$Tmax, lat = 10.777460)
sheet_data$CWBAL <- sheet_data$prcp - sheet_data$PET

#Tinh toan cac Chi so
spei <-spei(sheet_data$CWBAL, myArgs[3])
data_spei <- spei$fitted
data_spei <- round(data_spei, digits = 2)

file <- paste("media/results/",myArgs[2],"_spei_",myArgs[3],".xlsx")
write.table(cbind(year_month,data_spei), file = file, row.names=FALSE)

# Step 1: Call the pdf command to start the plot
png(filename = paste("media/results/",myArgs[2],"_spei_",myArgs[3],".png"), width = 480, height = 480, units = "px", pointsize = 12, bg = "white")
#pdf(file = "plot_spi3.pdf",   # The directory you want to save the file in
#    width = 4, # The width of the plot in inches
#    height = 4) # The height of the plot in inches
# Step 2: Create the plot with R code
par(mfrow=c(2,1))
plot(spei, paste(myArgs[2],"_",myArgs[3]))

# Step 3: Run dev.off() to create the file!
dev.off()
cat("OK")