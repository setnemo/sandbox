<?php

use Design\Structural\Decorator\DangerousHTMLTagsFilter;
use Design\Structural\Decorator\InputFormat;
use Design\Structural\Decorator\MarkdownFormat;
use Design\Structural\Decorator\PlainTextFilter;
use Design\Structural\Decorator\TextInput;

require __DIR__ . '/../../../vendor/autoload.php';


function displayCommentAsAWebsite(InputFormat $format, string $text)
{
    echo $format->formatText($text);
}

$dangerousComment = <<<HERE
Hello! Nice blog post!
Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

$naiveInput = new TextInput;
echo "Website renders comments without filtering (unsafe):\n";
displayCommentAsAWebsite($naiveInput, $dangerousComment);
echo "\n\n\n";

$filteredInput = new PlainTextFilter($naiveInput);
echo "Website renders comments after stripping all tags (safe):\n";
displayCommentAsAWebsite($filteredInput, $dangerousComment);
echo "\n\n\n";


$dangerousForumPost = <<<HERE
# Welcome

This is my first post on this **gorgeous** forum.

<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;


$naiveInput = new TextInput;
echo "Website renders a forum post without filtering and formatting (unsafe, ugly):\n";
displayCommentAsAWebsite($naiveInput, $dangerousForumPost);
echo "\n\n\n";

$text = new TextInput;
$markdown = new MarkdownFormat($text);
$filteredInput = new DangerousHTMLTagsFilter($markdown);
echo "Website renders a forum post after translating markdown markup" .
    " and filtering some dangerous HTML tags and attributes (safe, pretty):\n";
displayCommentAsAWebsite($filteredInput, $dangerousForumPost);
echo "\n\n\n";
