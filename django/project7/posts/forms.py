from django import forms
from .models import Post


class SubmitPostForm(forms.ModelForm):

    class Meta:
        model = Post

        fields = [
            "title",
            "author_name",
            "author_email",
            "category",
            "thumbnail",
            "summary",
            "body",
        ]

        widgets = {

            "title": forms.TextInput(attrs={
                "class": "form-control",
                "placeholder": "Masukkan judul artikel"
            }),

            "author_name": forms.TextInput(attrs={
                "class": "form-control",
                "placeholder": "Nama Penulis"
            }),

            "author_email": forms.EmailInput(attrs={
                "class": "form-control",
                "placeholder": "Email Penulis"
            }),

            "category": forms.Select(attrs={
                "class": "form-select"
            }),

            "thumbnail": forms.ClearableFileInput(attrs={
                "class": "form-control"
            }),

            "summary": forms.Textarea(attrs={
                "class": "form-control",
                "rows": 3,
                "placeholder": "Ringkasan artikel"
            }),

            "body": forms.Textarea(attrs={
                "class": "form-control",
                "rows": 10,
                "placeholder": "Isi artikel"
            }),

        }