declare -a files=("index" "documenten")

for file in "${files[@]}"
do
  php templates/$file.php > $file.html