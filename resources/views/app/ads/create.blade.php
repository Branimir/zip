@extends('app_base')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <form
                class="p-4 needs-validation"
                method="POST"
                action="{{ route('app.ads.submit') }}"
                enctype="multipart/form-data"
            >
                @csrf
                @method("POST")

                <label for="title">Naslov</label>
                <input id="title" class="form-control" type="text" name="title">

                <label for="short_description">Kratak opis</label>
                <input id="short_description" class="form-control" type="text" name="short_description">

                <label for="description">Detaljan opis</label>
                <textarea id="description" name="description" class="form-control"></textarea>

                <label for="price">Cijena</label>
                <input id="price" class="form-control" type="number" step="0.01" name="price">

                <label for="category_id">Kategorija</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option></option>
                    @foreach($categories as $category)
                        <option
                            id="category-{{$category->id}}"
                            value="{{$category->id}}"
                            data-ad-attributes="{{ $category->category_attributes }}"
                        >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                <div id="attributes">

                </div>
                <label for="state">Stanje</label>
                <div>
                    <select class="form-control" name="state" id="state">
                        <option value="new">Novo</option>
                        <option value="used">Polovno</option>
                    </select>
                </div>
                <label for="images">Slike</label>
                <input class="form-control" type="file" id="images" name="images[]" accept="image/png, image/jpeg" multiple>

                <input class="btn btn-primary mt-2" type="submit">
            </form>
        </div>
    </div>
@endsection
