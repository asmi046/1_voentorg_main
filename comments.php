<div class="section">
<!-- Далее содержимое вкладок: -->
<!-- Содержимое первой вкладки "комментарии к статье" -->
<div class="box visible">
		<ul id="thecomments"> <!-- нумерованный список -->
		<?php if ($comments && count($comments) > 0) { ?>    <!-- проверка есть ли комментарии -->
		<?php if ( $comments ) : ?> <!-- если комменты есть, то выводим то что ниже -->
		<?php foreach ($comments as $comment) : ?>
		<?php $comment_type = get_comment_type(); ?> <!-- проверка типа комментария -->
		<?php if($comment_type == 'comment') { ?> <!-- выводим только коммены, без пингов и бэков -->
		<div class="comment-head"> <!-- начало информационного блока -->
		<li>
		     <strong><?php comment_author_link(); ?></strong><br /> <!-- имя автора -->
		     <span class="comment-i"><?php comment_date(); ?></span> <!-- дата комментария  -->
		     <?php edit_comment_link('редактировать',' ',''); ?> <!-- ссылка на редактирование  -->
		</div><!-- конец информационного блока  -->
		     <?php if ($comment->comment_approved == '0') : ?> <!-- проверка на одобрение админом  -->
		         <span class="comment-i">Ваш комментарий ожидает модерации. </span>
		     <?php endif; ?> <!-- конец вывода текста о проверки на одобрение админом  -->
		 <div class="comment-text">
		     <?php comment_text(); ?> <!-- блок с текстом комментария  -->
		</div>
		<div class="clear"></div> <!-- очистка позиционирования  -->
		</li>
		<?php } ?>
		<?php endforeach; ?>
		</ul> <!-- конец нумерованного списка список -->
        <?php endif; ?> <!-- конец проверки наличия комментариев  -->
        <?php } else { ?> <!-- если комментариев нет, то   -->
        <span class="comment-i"><?php _e('No comments yet.'); ?></span> <?php } ?> <!-- эта строка скажет что их нет  -->
    <!-- форма ввода комментария -->
		<?php if ( comments_open() ) :  // проверка разрешены ли комментирование ?>
		<?php if ( get_option( 'comment_registration' ) && !$user_ID) : // если разрешено только для зареганных юзеров ?>
        <p>Вы должны <a href="/wp-login.php">представиться</a> для отправки комментариев.</p>
        <?php else : // если разрешено для всех посетителей ?>
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
        <?php if ( !$user_ID ) : // выводим три поля для гостей ?>
		<div class="comment-area">  <!-- блок формы ввода комментариев -->
		  <ul>
			  <li> <!-- построение списком, в моем случае горизонтальным  -->
				 <label for="author">Имя<span class="red"> *</span></label><br> <!-- поле ввода имени автора -->
				 <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" /> <!-- ширина поля 10 символов  -->
			  </li>
			  <li>
				  <label for="email">e-mail<span class="red"> *</span></label><br> <!-- поле для ввода почты автора  -->
				  <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" /> <!-- ширина 20 символов  -->
			  </li>
			  <li>
				  <label for="url">Ваш сайт</label><br>  <!-- поле ввода ссылки на сайт  -->
				  <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" /> <!-- ширина 10  -->
			  </li>
		  </ul> <!-- конец построение списком  -->
		</div> <!-- конец блока формы ввода комментариев  -->
        <?php endif; // Конец вывода трех полей для гостей ?>
		<div class="textcomarea"> <!-- блок для формы ввода текста комментария  --> 
			<p>Текст вопроса<textarea name="comment" cols="83" rows="5" id="comment"></textarea></p> <!-- ширина 83 символа  -->
			<p><input name="submit" type="submit" value="Отправить" /> <!-- кнопка отправить  -->
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
		</div>
        </form> <!-- конец формы  -->
<?php endif; // конец "если разрешено комментирование для всех посетителей" ?>
<?php endif;  // конец "если комментирование разрешено" ?>
 </div>
 </div>