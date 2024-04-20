<div>
    <label class="form-label" for="input-example-1">Title</label>
    <input class="form-input" type="text" id="input-example-1" placeholder="Title"  name="title" value="{{old('title', optional($article ?? null)->title)}}">

</div>
<div>
    <label class="form-label" for="input-example-3">Content</label>
    <textarea class="form-input" id="input-example-3" rows="2" name="content"  placeholder="Content">{{old('content',optional($article ?? null)->content)}}</textarea>

</div>
<div>
    <label class="form-label" for="input-example-1">Date and Time</label>
    <input class="form-input" type="text" id="datepicker" name="dateTime" placeholder="Date and Time" value="{{ old('dateTime', optional($article ?? null)->dateTime) }}">

</div>
<div>
    <label class="form-label" for="input-example-1">Address</label>
    <input class="form-input" type="text" id="input-example-1" placeholder="Address" name="address"  value="{{old('address', optional($article ?? null)->address)}}">

</div>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">


