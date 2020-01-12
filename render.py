from jinja2 import Environment, FileSystemLoader

file_loader = FileSystemLoader('templates')
env = Environment(loader=file_loader)

TEMPLATES = [
    'about',
    'basic_physics-01-basic_motion', 
    'complex_function_real_variable',
    'documenten',
    'energie',
    'index',
    'links',
    'minmaalmin',
    'parabolen',
    'subgroups',
    'tikz_dsl_1']

for template_name in TEMPLATES:
    template = env.get_template(template_name + '.html')
    with open(template_name + '.html', 'w') as outfile:
        outfile.write(template.render())