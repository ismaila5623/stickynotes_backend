@extends('layouts.app')


@section('body')
        <div class="sidebar">
            <div class="categories-container">
                <div class="contained-menu">
                    <div class="menu-icon--container">
                        <span class="menu-icon"></span>
                        <span class="menu-icon"></span>
                        <span class="menu-icon"></span>
                    </div>
                </div>
                <form action="" method="" class="categories-create--container">
                    <div class="add-btn--container"></div>
                    <span class="add-btn--label">add category</span>
                    <input type="text" class=" categories-add--input hidden form-input">
                    <button class="hidden categories-add--btn">add</button>
                </form>
                <div class="search-container">
                    <input type="text" placeholder="search" class="search-input">
                    <img src="./assets/images/search-icon.jpg" alt="" class="search-icon">
                </div>
                <div class="orderby-container">
                    <select name="" id="" class="orderby">
                        <option value="" class="orderby-option">id</option>
                        <option value="" class="orderby-option">date created</option>
                        <option value="" class="orderby-option">title</option>
                    </select>
                    <div class="orderby-type--container">
                        <input type="checkbox" checked class="orderby-type--input">
                        <label class="orderby-type--label" for="">asc</label>
                    </div>
                </div>
                <div class="categories">
                    <h3 class="categories-title title">Categories</h3>
                    <ul class="categories-item--container">
                        <!-- <li class="categories-item">
                            <a class="categories-link" href="#">
                                <span class="categories-name">Next project</span>
                                <input type="text" class="hidden categories-edit--input">
                                <div class="categories-tools">
                                    <span class="save hidden">save</span>
                                    <span class="edit">edit</span>
                                    <span class="delete">delete</span>
                                    <span class="cancel hidden">cancel</span>
                                </div>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div id="add-note--container" class="add-note--container hidden">
            <h3 class="title">
                Add new Note
            </h3>
            <div class="note">
                <div class="note-top">
                    <input type="text" value="Edit title" class="note-title">
                    <div class="categories-tools">
                        <span class="save">save</span>
                        <span class="edit minimize">min -</span>
                        <span class="cancel">cancel</span>
                    </div>
                </div>
                <div class="note-middle">
                    <textarea name="" id="" cols="30" rows="10" class="note-text--input"></textarea>
                </div>
                <div class="note-bottom">
                    <div class="attachment-container">
                        <span class="attachments">images <sup class="attachments-count">5</sup></span>
                        <div class="btn-label--add-container">
                            <span class="add-btn--label">add images</span>
                            <div class="add-btn--container"></div>
                        </div>
                        <input type="file" class="input-dialog hidden" multiple accept="image/*">
                    </div>
                </div>
            </div>
        </div>
        <main class="main">
            <div class="main-top">
                <div class="main-top--items">
                    <h3 class="title notes-title">
                        Note category's title
                    </h3>
                    <div class="search-container">
                        <input type="text" placeholder="search" class="search-input">
                        <img src="./assets/images/search-icon.jpg" alt="" class="search-icon">
                    </div>
                </div>
                <div class="main-bottom--items">
                    <div class="orderby-container">
                        <select name="" id="" class="orderby">
                            <option value="" class="orderby-option">id</option>
                            <option value="" class="orderby-option">date created</option>
                            <option value="" class="orderby-option">title</option>
                        </select>
                        <div class="orderby-type--container">
                            <input type="checkbox" checked class="orderby-type--input">
                            <label class="orderby-type--label" for="">asc</label>
                        </div>
                    </div>
                    <ul class="nav-item--container">
                        <li class="nav-item">
                            <a href="#" class="nav-link">older</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Yesterday</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active notes-link">latest</a>
                        </li>
                    </ul>
                    <div id="new-note--btn" class="add-btn--container"></div>
                </div>
            </div>
            <div class="main-content">
                <div class="notes">
                    <!-- <div class="note">
                        <div class="note-top">
                            <input type="text" value="Edit title" class="note-title">
                            <div class="categories-tools">
                                <span class="save">save</span>
                                <span class="edit">edit</span>
                                <span class="delete">delete</span>
                            </div>
                        </div>

                        <div class="note-middle">
                            <textarea name="" id="" cols="30" rows="10" class="note-text--input hidden"></textarea>
                            <p class="note-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, facilis numquam. Iusto ex quam tempore unde fuga ea voluptas, reprehenderit nemo, magni exercitationem omnis esse saepe impedit quia eligendi reiciendis.
                            </p>
                        </div>
                        <div class="note-bottom">
                            <div class="attachment-container">
                                <span class="attachments">images <sup class="attachments-count">5</sup></span>
                                <div class="btn-label--add-container">
                                    <span class="add-btn--label">add images</span>
                                    <div class="add-btn--container"></div>
                                </div>-->
                    <!-- <input type="file" class="add-attachment"> -->
                    <!-- </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </main>
@endsection