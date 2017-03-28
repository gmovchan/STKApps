<div class="row">
    <button type="button" class="btn btn-default" id="copyAdName" title="Скопировать заголовок"><span class="glyphicon glyphicon-copy" aria-hidden="true"></span></button>
    <a href="editad?id=<?php echo htmlspecialchars($data['adInfo']['id'], ENT_QUOTES) ?>">
        <button type="button" class="btn btn-default pull-right" id="copyAdName" title="Редактировать"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
    </a>
</div>
<div class="row">
    <p><strong><span id="adName"><?php echo htmlspecialchars($data['adInfo']['name'], ENT_QUOTES) ?></span></strong></p>
</div>

<div class="row">
    <button type="button" class="btn btn-default" id="copyAdDescription" title="Скопировать описание"><span class="glyphicon glyphicon-copy" aria-hidden="true"></span></button>
</div>
<div class="row">
    <p>
        <span id="adDescription">
            <?php
            foreach ($data['adInfo']['products'] as $product) {
                echo htmlspecialchars($product, ENT_QUOTES) . "<br>";
            }
            // убрал htmlspecialchars, что является уязвимостью для XSS атак
            // не придумал ничего лучше, надо отобразить хтмл код из описания как текст
            // для вставки на авито
            echo nl2br($data['adInfo']['description']);
            ?>
        </span>

    </p>
</div>

<!-- Функция копирования -->    
<script src="<?php echo '/../js/copyAd.js'; ?>"></script>

