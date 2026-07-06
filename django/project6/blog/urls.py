from django.urls import path

from .views import post_detail, post_list
from .views import About, About

urlpatterns = [
    path("post/<int:pk>/", post_detail, name="post_detail"),
    path("about/", About.as_view(), name="about"),
    path("", post_list, name="home"),
]
