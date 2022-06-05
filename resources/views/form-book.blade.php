<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - GoSNippets</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link rel='stylesheet' type="text/css" href='style.css' >
                                <link rel="stylesheet" href="{{ asset('/css/css.css') }}" type="text/css">
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Add New Book</h1>
                    </div>
                    <form action="/proses" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Book title" required>
                            <span class="form-label">Title</span>
                        </div>
                        <div class="form-group">
                            <input class="form-control-file" type="file" placeholder="cover" required>
                            <span class="form-label">cover</span>
                        </div>
                        <div class="form-group">
                            <select class="form-control" required>
                                    <option value="" selected hidden>Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                                        @endforeach                                
                            </select>
                            <span class="form-label">Category</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="author">
                                    <span class="form-label">Author</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="year published">
                                    <span class="form-label">year published</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="tel" placeholder="publisher">
                            <span class="form-label">publisher</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                        >
                                    </div>
                                </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn-send  pt-2 btn-block
                                    " value="Add book" >
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                            <script type='text/javascript'></script>
                            </body>
                        </html>