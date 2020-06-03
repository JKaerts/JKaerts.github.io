declare -a files=("about"
                  "basic_physics-01-basic_motion"
                  "index"
				  "documenten"
				  )

for file in "${files[@]}"
do
  php templates/$file.php > $file.html
done