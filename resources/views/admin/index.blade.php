@extends('admin.layouts.app')

@section('content')
    <section id="main-content">
        <div class="container">

            <div class="span-6">
                <div class="panel">
                    <label class="panel-header" for="page-title-fr">
                        Titre Français
                        <span class="hint">Le titre de votre nouveau produit en français.</span>
                    </label>
                    <div class="panel-body">
                        <input id="page-title-fr" type="text" placeholder="titre..." />
                    </div>
                </div>
            </div>

            <div class="span-6">
                <div class="panel">
                    <label class="panel-header" for="page-title-en">
                        Titre Anglais
                        <span class="hint">Le titre de votre nouveau produit en anglais.</span>
                    </label>
                    <div class="panel-body">
                        <input id="page-title-en" type="text" placeholder="titre..." />
                    </div>
                </div>
            </div>

            <div class="span-6">
                <div class="panel">
                    <label class="panel-header" for="page-description-fr">
                        Description Française
                        <span class="hint">La description de votre nouveau produit en français.</span>
                    </label>
                    <div class="panel-body">
                        <input id="page-description-fr" type="text" placeholder="description..." />
                    </div>
                </div>
            </div>

            <div class="span-6">
                <div class="panel">
                    <label class="panel-header" for="page-description-en">
                        Description Anglaise
                        <span class="hint">La description de votre nouveau produit en anglais.</span>
                    </label>
                    <div class="panel-body">
                        <input id="page-description-en" type="text" placeholder="description..." />
                    </div>
                </div>
            </div>

            <div class="span-12">
                <div class="panel">
                    <label class="panel-header" for="page-main-content-fr">
                        Contenu Français
                        <span class="hint">Le détail de votre nouveau produit en français.</span>
                    </label>
                    <div class="panel-body">
                        <div class="wysiwyg">
                            <span class="fa fa-bold"></span>
                            <span class="fa fa-italic"></span>
                            <span class="fa fa-underline"></span>
                            <span class="fa fa-strikethrough"></span>
                            <span class="fa fa-list-ul"></span>
                            <span class="fa fa-list-ol"></span>
                            <span class="fa fa-link"></span>
                            <span class="fa fa-image"></span>
                        </div>
                        <textarea id="page-main-content-fr"></textarea>
                    </div>
                </div>
            </div>

            <div class="span-12">
                <div class="panel">
                    <label class="panel-header" for="page-main-content-en">
                        Contenu Anglais
                        <span class="hint">Le détail de votre nouveau produit en anglais.</span>
                    </label>
                    <div class="panel-body">
                        <div class="wysiwyg">
                            <span class="fa fa-bold"></span>
                            <span class="fa fa-italic"></span>
                            <span class="fa fa-underline"></span>
                            <span class="fa fa-strikethrough"></span>
                            <span class="fa fa-list-ul"></span>
                            <span class="fa fa-list-ol"></span>
                            <span class="fa fa-link"></span>
                            <span class="fa fa-image"></span>
                        </div>
                        <textarea id="page-main-content-en"></textarea>
                    </div>
                </div>
            </div>

            <div class="span-6">
                <div class="panel">
                    <label class="panel-header" for="picture">
                        Photo
                        <span class="hint">La photo de votre nouveau produit.</span>
                    </label>
                    <div class="panel-body">
                        <input id="picture" type="file" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



