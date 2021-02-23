<div class="section4 section_page subscribe price-page-subscribe">
    <div class="container">
        <div class="col-sm-12 subscribe-inner">
            <h3 class="text-center sec_title_mainer ">Don't Miss Our Latest Success Secrets</h3>
            <p class="about-text1">Want the best customer support and startup content</p>
            <p class="about-text1">Delivered straight to your inbox?</p>

            <div class="col-sm-12 form-wrapper">
<!--                 <form class="form-inline" id="subscribeForm">
 -->                <div class="form-group mb-2 subscribe-box">
                    <input type="email" class="form-control-plaintext" id="subscriber_email" placeholder="Add Your Email" name="email" required="true" />
                    </div>
                    <input class="btn btn-primary mb-2 about-submit" id="subscribe_newsletter" name="submit" value="Submit" href="javascript:void(0)" onclick="submit_new();"/>
<!--                 </form>-->
                <div id="subscribe_message" style="margin-top: 10px;"></div>
            </div>
        </div>
    </div>
</div>
 <script>
            function submit_new()
            {
           
            var subscriber_email = $("#subscriber_email").val();
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                    if (reg.test(subscriber_email) == false) 
                    {
                        alert('Invalid Email Address');
                        return false;
                    } 
               $.ajax({
                    method : "post",
                    url: "ajax_talk_to_expert.php",
                    data: { "subscriber_email": subscriber_email, 
                    "type": "newsletter"},
                  success: function(result){
                    alert(result);
                    /*  alert(result);
                      return false; */
                       },
                    error: function ( ) {
                            alert('Something went wrong');
                        }
                });  
        }
    </script>
