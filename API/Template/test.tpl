<html lang="uk">
<head>
    <title> {$Email['title']} </title>
</head>
<body>
{foreach $Email['text'] as $email}
    {if $email != ''}
    <strong>{$email['password']}</strong><br>
    {/if}
{/foreach}
<br>
<br>
{foreach $Email['text3'] as $test}
{if $test['password'] != ''}
<strong>{$test['password']}</strong><br>
{/if}
{/foreach}
<br>
<br>
</body>
</html>