from shutil import copyfile
from jinja2 import Environment, FileSystemLoader

env = Environment(loader=FileSystemLoader('./templates'))

directories = [
    'basic_physics'
]

pages = [
    'index.html',
    'basic_physics/01-basic_motion.html'
]

def get_prefix(path):
    """compute the prefix for relative directory references"""
    directory_depth = path.count('/')
    if directory_depth == 0:
        prefix = './'
    else:
        directory_prefix = '../' * directory_depth
    return prefix

for page in pages:
    print('Rendering ' + page)
    template = env.get_template(page)
    variables = {'prefix': get_prefix(page)}
    with open(page, 'w') as outfile:
        outfile.write(template.render(variables))

