echo "Create new csv"
bash ./createcsv.sh
echo "Send csv to webserver via ftp"
bash ./scptransfercsv.sh
echo "Update program completed"
