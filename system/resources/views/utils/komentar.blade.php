<div class="card my-5" style="border-radius: 20px;">
                <div class="card-body">   
                    <div class="leave-comment-form my-3 " id="comment">
                        <h3 class="aside-title my-3">Leave a reply</h3>
                        <form action="{{url('konten')}}" method="post">
                            @csrf
                            <div class="input-grids">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" placeholder="Your Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <textarea name="komentar" class="form-control" placeholder="Your Comment" required=""></textarea>
                                </div>
                            </div>
                            <div class="submit text-right">
                                <button class="btn btn-style btn-primary">Post Comment
                            </button></div>
                        </form>
                    </div>
                </div>
            </div>