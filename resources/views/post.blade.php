

       <div class="modal fade" id="posts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         
              <div class="post-image" >
              <img src="../img/image.jpg">
              </div>
              <div class="post-comment">
                <ul class="info">
                  <li class="post-title">{{ $post->title }}</li>
                  <li class="post-account">aldergutierrez</li>
                  <li class="post-category">{{ $post->creativeField }}</li>
                </ul>
                <img src="img/{{ $post->image }}">
                <div class="btn-follow btn">Follow</div>
                <ul class="likes">
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>{{ $post->likes }}</li>
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>{{ $post->comments }}</li>
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>{{ $post->views }}</li>
                </ul>
              <div class="date">Published: {{ $post-> created_at }}</div>
              <div class="border"></div>
              <img class="tool" src="../img/Pic1.jpg">
              <div class="border"></div>
              <div class="btn btn-like">Like project</div>
              <div class="date">Comments(20)</div>
              <textarea class="txt-comment"></textarea>
              <div class="btn btn-like">Post comment</div>
              <div class="comments">
              <img class="img-comment" src="../img/Pic1.jpg">
              <div class="txt-date">12:34am</div>
              <div class="comment">
                <div class="txt-name">Alder</div>
                <div class="txt-comm">Buen trabajo!</div>
                
              </div>
              <img class="img-comment" src="../img/Pic1.jpg">
              <div class="txt-date">12:34am</div>
              <div class="comment">
                <div class="txt-name">Alder</div>
                <div class="txt-comm">Buen trabajo!</div>
  
              </div>
              <img class="img-comment" src="../img/Pic1.jpg">
              <div class="txt-date">12:34am</div>
              <div class="comment">
                <div class="txt-name">Alder</div>
                <div class="txt-comm">Buen trabajo!</div>
 
              </div>
              </div>
              </div>


              
            </div>
            </div>
          </div>