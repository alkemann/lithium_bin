<form method="POST">

<?php
$errors = $paste->errors();

$this->form->config(array('templates' => array('checkbox' =>
	'<input type="hidden" name="{:name}" value="0" />
	 <input type="checkbox" value="1" name="{:name}"{:options} />'
)));


if (isset($paste->id) && isset($paste->rev)) : ?>
	<input type="hidden" name="Paste[id]" value="<?=$paste->id;?>" />
	<input type="hidden" name="Paste[rev]" value="<?=$paste->rev;?>" />
<?php endif;?>

<?php
	echo $this->form->label('Paste.author', 'Who are you?', array(
		'class' => 'required'
	));
	echo $this->form->text('Paste[author]', array(
		'id' => 'Paste.author',
		'value' => $paste->author
	));
	if (isset($errors['author'])) {
		echo '<p style="color:red">'.$errors['author'].'</p>';
	}
	echo $this->form->checkbox('Paste[remember]', array(
		'id' => 'Paste.remember',
		'checked' => 'checked',
	));
	echo $this->form->label('Paste.remember', ' remember');
?>
<br><br>
<?php
	echo $this->form->label('Paste.content', 'What do you have to say?', array(
		'class' => 'required'
	));
	echo $this->form->textarea('Paste[content]', array(
		'id' => 'Paste.content',
		'rows' => '20',
		'value' => $paste->content
	));
	if (isset($errors['content'])) {
		echo '<p style="color:red">'.$errors['content'].'</p>';
	}
?>
<br>

<?php
	echo $this->form->label('Paste.language', 'language');
	echo $this->form->select('Paste[language]', array_combine($languages, $languages), array(
		'id' => 'Paste.language',
		'value' => $paste->language
	));
	if (isset($errors['language'])) {
		echo '<p style="color:red">'.$errors['language'].'</p>';
	}

	echo $this->form->checkbox('Paste[permanent]', array(
		'id' => 'Paste.permanent'
	));
	echo $this->form->label('Paste.permanent', " permanent");
?>
<br><br>
<?php echo $this->form->submit('save');?>
</form>