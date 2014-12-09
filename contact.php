<?php
include_once "template/head.php";
?>





        <section class="row contact-me">
            <div class="container">

                <h1 class="cat-title"><strong>Contact</strong> me</h1>


                <aside class="col-md-4 facebookWidget">

                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=459669054117955&version=v2.0";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                    <div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="auto" data-height="600px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>

                </aside>


                <div class="col-md-8">

<div class="row">
    <article class="col-md-6">
        <h2>If it is urgent</h2>
        <address class="vcard">
            <p class="fn"><a class="url" href="#">Dhilhan Mithree Rajapaksha</a><p>
            <!--<p class="adr">-->
                <!--<span class="region">Hambanthota, </span>-->
                <!--<span class="postal-code">10300, </span>-->
                <!--<span class="country-name">Sri Lanka</span>-->
            <!--</p>-->
            <p class="tel">+94 2 729 729</p>
        </address>
    </article>

    <article class="col-md-6">
        <h2>My social media links</h2>
        <div class="social">
            <span class="icon-facebook"></span>
            <span class="icon-twitter"></span>
            <span class="icon-googleplus"></span>
        </div>
    </article>

</div>




                <article>
                        <form class="form-horizontal" action="" method="post">
                            <h2>I love to hear it from you</h2>
                            <fieldset>

                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Name</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">E-mail</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                    </div>
                                </div>

                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="message">Message</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                </article>

                </div>

            </div>
        </section>




<style>
    .cat-title{
        margin-bottom: 50px;
        border-bottom: 1px solid;
        padding-bottom: 20px;
    }
    .thumbnail figcaption .disc{
        background: #000;
        color: #fff;
    }
    .item-focus .thumbnail img{
        /*width: 75%;*/
        /*float: left;*/
        /*position: relative;*/

        -webkit-filter: grayscale(0);
        -moz-filter: grayscale(0);
        -o-filter: grayscale(0);
        -ms-filter: grayscale(0);
        filter: grayscale(0);
    }


</style>

<script>
    $(function() {
        var gridItems = $('.grid-items');
        var gridItem = $('.grid-item');
        var imageGridPopUp = $('#imageGridPopUp');

//        gridItem.on('click', function(evant){
//            evant.preventDefault();
////            debugger;
//            gridItems.find('.item-focus').removeClass('item-focus');
//            $(this).addClass('item-focus');
//        })

//        $('#imageGridPopUp .grid-item').on('show.bs.modal', function (event) {
//            var button = $(event.relatedTarget) // Button that triggered the modal
//            var recipient = button.data('whatever') // Extract info from data-* attributes
//            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
//            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
//            var modal = $(this)
//        })

        gridItem.on('click', function(evant){
            evant.preventDefault();

            imageGridPopUp.find('.modal-content').html($(this).clone()).end().modal('show');
//            gridItems.find('.item-focus').removeClass('item-focus');
//            $(this).addClass('item-focus');
        })



    });
</script>



<?php
include_once "template/footer.php";
?>
