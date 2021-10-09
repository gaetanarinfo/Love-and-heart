<?php $user = selectDB('*', 'users', 'id = "' . $_SESSION['user_id'] . '"', $db, '1'); ?>

<div class="box_chat">

    <div class="onglet_chat">
        <div class="chat_status <?= ($user['connected'] == 3) ? "offline" : "" ?> <?= ($user['connected'] == 1) ? "connected" : "" ?> <?= ($user['connected'] == 2) ? "disturb" : "" ?> me-1"></div>
        <div class="choice_status">
            <div class="choice disturb choice_1" title="Absent"></div>
            <div class="choice offline choice_2" title="Hors ligne"></div>
            <div class="connected choice choice_3" title="En ligne"></div>
        </div>
        <div class="chat_title">Discussion instantanée (<span class="user_count"></span>)</div>
        <div class="chat_close float_end"><i class="fas fa-times close"></i><i class="fas fa-external-link-alt open"></i></div>
    </div>

</div>

<div class="chat_box">

    <!-- Loader -->
    <div class="loader_chat" id="chat_loader">
        <div class="heart"></div>
        <div class="heart heart2"></div>
        <div class="heart heart3 pinkHeart"></div>
        <div class="heart heart4 fushiaHeart"></div>
        <div class="heart hear5 pinkHeart"></div>
    </div>

    <div class="nav_filter">
        <div class="d-inline-block item_1">
            <i class="fas fa-filter"></i> <span class="filter ms-1">Filtrer</span>
        </div>
    </div>

    <div class="filter_by">
        <p class="filter_title mb-0">Filtrer par status :</p>
        <div class="filter d-inline-block chat_status3_items_1"><span class="chat_status3 connected"></span><span class="ms-1"></span>En ligne</div>
        <div class="filter d-inline-block chat_status3_items_2 ms-2"><span class="chat_status3 disturb"></span><span class="ms-1"></span>Absent</div>
        <div class="filter d-inline-block chat_status3_items_3 ms-2"><span class="chat_status3 offline"></span><span class="ms-1"></span>Hors ligne</div>
    </div>

    <div class="list_users <?= ($user['premium'] == 3) ? "chat_no_premium" : "" ?>"></div>
    <div style="display: none;" class="list_users2 <?= ($user['premium'] == 3) ? "chat_no_premium" : "" ?>"></div>

    <div class="head_message">

    </div>

    <div class="message_online">


    </div>

    <div class="foot_message">
        <form id="send_message" method="POST">
            <label>Votre message :</label>
            <textarea required minlength="5" name="content" class="form-control"></textarea>
            <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>" />
            <input type="hidden" id="user_receiv" name="user_send" value="<?= $data['user_id'] ?>" />
            <div class="text-end">
                <button class="btn btn-success btn-navbar btn-message">Envoyer</button>
            </div>
        </form>
    </div>

</div>