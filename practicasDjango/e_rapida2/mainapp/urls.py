from django.urls import path
from . import views


urlpatterns = [
    path('', views.index, name='index'),
    path('about/', views.about, name='acercade'),
    path('mision/', views.mision, name='mision'),
    path('vision/', views.vision, name='vision'),
    path('inciosesion/', views.iniciosesion, name='iniciosesion'),
    path('registro/', views.registro, name="registro")
]