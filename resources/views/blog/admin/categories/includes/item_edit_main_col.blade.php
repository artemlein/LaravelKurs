@php
    /** @var \App\Models\BlogCategory $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"></div>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#maindata" role="tab">Основные данные</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="maindata" role="tabpanel">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input  name="title" value="{{ $item->title }}"
                                    id="title"
                            type="text"
                            class="form-control"
                            minlength="3"
                            required>
                        </div>

                        <div class="form-group">
                            <label for="slug">Идентификатор</label>
                            <input  name="slug" value="{{ $item->slug }}"
                                    id="slug"
                                    type="text"
                                    class="form-control"
                                    minlength="3"
                                    required>
                        </div>

                        <div class="form-group">
                            <label for="parent_id">Идентификатор</label>
                            <select  name="parent_id"
                                    id="parent_id"
                                    class="form-control"
                                    placeholder="Выберите категорию"
                                    required>
                                @foreach($categoryList as $categoryOption)
                                    <option value="{{ $categoryOption->id }}"
                                        @if($categoryOption->id == $item->parent_id) selected @endif>
                                    {{$categoryOption->id}}. {{$categoryOption->title}}
                                    </option>
                                @endforeach
                        </div>

                        <div class="form-group">
                            <label for="description">Идентификатор</label>
                            <textarea  name="description"
                                    id="description"
                                    class="form-control"
                                    rows="3" {{ old('description', $item->description) }}>
                            </textarea>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>