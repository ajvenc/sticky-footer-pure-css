<!DOCTYPE HTML>
<html>
    <head>     
        <title>Sticky Footer</title>
        <meta charset="UTF-8">
        <link rel='stylesheet' type='text/css' href='style.css'>
    </head>
    <body>      
        <!-- Wrapper -->
        <div class="wrapper">
            <!-- Header -->
            <div class="site header">
                Header
            </div>

            <!-- Content -->
            <div class='site content'>  
                <!-- 
                    By writting the ?content GET variable to the end of URL you
                    can test it with long content too.
                -->
                <?php include 'content.php'; ?>
            </div> 

            <!-- Footer -->
            <div class="site footer">
                Footer
            </div>    
        </div>  
    </body>
</html>