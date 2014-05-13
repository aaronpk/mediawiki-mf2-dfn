<?php
ob_start();
?>
 
'''<dfn>[https://github.com/photo Trovebox]</dfn>''' (formerly [http://theopenphotoproject.org OpenPhoto]) is a photo application [[project]] that lets you store your photos on Dropbox, Amazon S3 or in your garage, and serve them from URLs on your own domain. It's also an online service to "organize and share [[photos]] and [[videos]] with clients and colleagues".
 
'''<dfn>[https://github.com/photo Trovebox]</dfn>''' (formerly [http://theopenphotoproject.org OpenPhoto]) is a photo application [[project]] that lets you store your photos on Dropbox, Amazon S3 or in your garage, and serve them from URLs on your own domain.
 
<?php
$text = ob_get_clean();
 
if(preg_match_all('/.*<dfn>.+<\/dfn>.+?[.:](?:\s|$)/', $text, $matches)) {
  foreach($matches[0] as $match) {
    $text = str_replace($match, '<span class="p-summary">'.$match.'</span>', $text);
  }
}
 
echo $text;
