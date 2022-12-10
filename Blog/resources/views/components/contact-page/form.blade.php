<form action="" method="post">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label" name="mail">Email address</label>
    <input name="mail" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label" name="name">Name</label>
    <input name="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label" name="topic">topic</label>
    <textarea name="topic" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="topic"></textarea>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label" name="message">Message</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Message" name="message">
</div>
<button type="submit" class="btn btn-primary" name="submit">submit</button>
</form>
