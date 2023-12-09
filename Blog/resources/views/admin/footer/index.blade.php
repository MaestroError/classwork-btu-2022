<html>
    <body>
        <div class="container">
            <form action="{{ route('admin.footer.update', footer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <div>
                    <div>
                        <strong>email:</strong>
                        <input type="text" name="name" value="{{ footer->email }}"
                            placeholder="quiz email">
                    </div>
                </div>
                <div>
                    <div>
                        <strong>phone:</strong>
                        <input type="description" name="phone" placeholder="quiz phone"
                            value="{{ footer->phone }}">
                    </div>
                </div>
                <div>
                    <div>
                        <strong>address</strong>
                        <input type="text" name="address" value="{{ footer->address }}"
                            placeholder="quiz address">
                    </div>
                </div>
                <div>
                    <div>
                        <strong>about:</strong>
                        <input type="text" name="about" value="{{ footer->about_us }}"
                            placeholder="quiz about">
                    </div>
                </div>
                <button type="submit">Update</button>
            </div>
        </form>
        </div>
    </body>
</html>