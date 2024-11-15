from django.shortcuts import render,HttpResponse

# Create your views here.
def index(requets):
    return render(requets, 'mainapp/index.html', {
        'title': 'Inicio',
        'content': '..:: Esta es mi Pagina de Inicio ::..'
    })
def about(requets):
    return render(requets, 'mainapp/about.html', {
        'title': 'Acerca de',
        'content': 'este es el acerca de'
    })
def mision(requets):
    return render(requets, 'mainapp/mision.html', {
        'title': 'Mision',
    })
def vision(requets):
    return render(requets, 'mainapp/vision.html', {
        'title':'Vision'
    })

def custom_404(request, exception):
    return render(request, 'mainapp/404.html')