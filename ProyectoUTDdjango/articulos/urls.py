from django.urls import path
from articulos import views

urlpatterns = [
    path('articulos/', views.list_art,name='articulos'),
    path('categorias/', views.list_cat,name='categorias'),
]