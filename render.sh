declare -a files=("about"
                  "basic_physics-01-basic_motion"
				  "complex_function_real_variable"
				  "documenten"
				  "energie"
                  "index"
				  "links"
				  "minmaalmin"
				  "parabolen"
				  "subgroups"
				  "tikz_dsl_1"
				  )

for file in "${files[@]}"
do
  php templates/$file.php > $file.html
done