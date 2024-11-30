from django.shortcuts import render

# Create your views here.

def index(request):
    return render(request, 'mainapp/index.html',{
        'titlle': 'Inicio | pagina de inicio',
        'content':'..:: ¡Bienvenido a mi pagina principal! ::..'
    })

def about(request):
    return render(request, 'mainapp/about.html',{
       'title': 'Acerca de', 
       'content':'..:: Somos un equipo de Desarrollo de SE con Django ::..'
    })