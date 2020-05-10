category=$(cat src/category.txt)
echo $category
# delete previous csvs
echo "Deleting backend/html/worstbirds.csv"
rm -rf html/csv/worstbirds.csv
# create new csv filled with worst birds of the last 5 days
echo "Creating new worstbirds.csv"
touch html/csv/worstbirds.csv
for d in 2 3 4 5 6
do
echo "Looking $d days back"
title=$(python3 backend/main.py 0 "$category" $d)
echo $title
img_url=$(python3 backend/main.py 1 $title)
echo $img_url
descr=$(python3 backend/main.py 2 $title 3)
echo $descr
date=$(python3 backend/main.py 3 $d)
echo $date
views=$(python3 backend/main.py 4 $title $d)
echo $views
link="https://de.wikipedia.org/wiki/$title"
echo $link
img_filename=$(python3 backend/main.py 5 "$title")
imgsrc_url="https://commons.wikimedia.org/wiki/File:$img_filename"
echo "$title;$img_url;$descr;$date;$views;$link;$imgsrc_url" >> html/csv/worstbirds.csv
done
