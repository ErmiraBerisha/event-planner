<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header();?>

<h5>Contact Us</h5>
  <!-- Form -->
<div class="container">
    
    <form action="" method="post" id="contactus">   
        <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
            <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
            <textarea name="message" id="message" placeholder="Your message" class="form-control" required></textarea>
            <input type="submit" name="submit" id="submit" placeholder="Submit" class="form-control" required>
        </div>
    </form>
    
</div>

<script>

(function($){

    $('#contactus').submit( function(event){

        event.preventDefault();

        var endpoint = '<?php echo admin_url('admin-ajax.php');?>';

        var form = $('#contactus').serialize();

        var formdata = new FormData;

        formdata.append('action', 'contactus');
        formdata.append('contactus', form);

        $.ajax(endpoint, {
            type: 'POST',
            data:formdata,
            processsData: false,
            contentType: false,

            success: function(res) {

                alert('Thank you');
            },

            error: function(err)
            {


            }


        })
        
    }) 
    
})(jQuery)



</script>




<?php get_footer();?>
