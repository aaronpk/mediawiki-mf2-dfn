<?php
ob_start();
?>
 
T1: '''<dfn>[https://github.com/photo Trovebox]</dfn>''' (formerly [http://theopenphotoproject.org OpenPhoto]) is a photo application [[project]] that lets you store your photos on Dropbox, Amazon S3 or in your garage, and serve them from URLs on your own domain. It's also an online service to "organize and share [[photos]] and [[videos]] with clients and colleagues".

T2: <dfn>Lorem ipsum</dfn> This test does not have bold formatting around the dfn.

T3: <dfn>Lorem ipsum</dfn> This test does not have bold formatting around the dfn. It is also multiple sentences long.

T4: '''<dfn>Lorem ipsum</dfn>''' This test ends the first sentence with a question mark?

T5: '''<dfn>Lorem ipsum</dfn>''' This test ends the first sentence with a question mark? It is also multiple sentences long.

T6: '''<dfn>Lorem ipsum</dfn>''' This test ends the first sentence with an exclamation mark!

T7: '''<dfn>Lorem ipsum</dfn>''' This test ends the first sentence with an exclamation mark! It is also multiple sentences long.
 
T8: '''<dfn>[http://example.com Lorem ipsum]</dfn>''' This test includes a link in the dfn.

T9: '''<dfn>[http://example.com Lorem ipsum]</dfn>''' This test includes a link in the dfn. It is also multiple sentences long.

T10: '''<dfn>[http://example.com Lorem ipsum]</dfn>''' This test includes a link in the dfn and a [http://example.com link] in the text.

T11: '''<dfn>[http://example.com Lorem ipsum]</dfn>''' This test includes a link in the dfn and a [http://example.com link] in the text. It is also multiple sentences long.

T12: '''<dfn>[http://example.com Lorem ipsum]</dfn>''' This test includes a link in the dfn and a [http://example.com/path/to/test.html more complicated link] in the text.

T13: '''<dfn>[http://example.com Lorem ipsum]</dfn>''' This test includes a link in the dfn and a [http://example.com/path/to/test.html more complicated link] in the text. It is also multiple sentences long.

T14: '''<dfn>post</dfn>''' can refer to either: <ul><li> A discreet piece of content (perhaps a <a href="/note" title="note">note</a> or and <a href="/article" title="article">article</a>) — see also <a href="/posts" title="posts">posts</a>
</li><li> The act of creating the aforementioned content
<ul><li> Also used elsewhere, e.g "posted a comment", "posted a photo"
</li></ul>
</li></ul>

<?php
$text = ob_get_clean();

if ( preg_match_all('/.*<dfn>.+<\/dfn>.+?[\.:!\?](?=\s|$)/', $text, $matches) )
{

	foreach ( $matches[0] as $match )
	{
		$text = str_replace($match, '<span class="p-summary">'.$match.'</span>', $text);
	}

}
 
echo $text;

echo '<pre>', print_r($matches), '</pre>';
