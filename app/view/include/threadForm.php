<?php if(isset($_SESSION['userId'])) : ?>
    <form id="threadForm" method="POST">
        <span>Create thread</span> <br>  
        <span class="formSpan">Subject</span>
        <input type="text" name="subject"></input> <br>
        <span class="formSpan">Comment</span>
        <textarea type="text" name="comment"  id="comment"></textarea> <br>
        <input type="submit" value="post">
    </form>        
<?php else : ?>    
    <span>If you want to create a thread you must <a id="login" href="<?php echo URLROOT; ?>/users/login" class="buttonStyle">log in</a>!</span>
<?php endif; ?>


    
