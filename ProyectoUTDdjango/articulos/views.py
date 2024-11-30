from django.shortcuts import render,HttpResponse, redirect
""" from django.contrib.auth.forms import UserCreationForm """
from django.contrib import messages
from django.contrib.auth.decorators import login_required
from articulos.models import Article, Category

# Create your views here.
@login_required(login_url='iniciosesion')
def list_art(request):

    #sacar los articulos de la BD
    articulos = Article.objects.all()

    return render(request,'articulos/listado_art.html',{
        'title':'Articulos',
        'content':'listado de articulos',
        'articulos':articulos
    })
@login_required(login_url='iniciosesion')
def list_cat(request):

    categorias=Category.objects.all()
    return render(request,'categorias/listado_cat.html',{
        'title':'Categorias',
        'content':'listado de categorias',
        'categorias': categorias
    })