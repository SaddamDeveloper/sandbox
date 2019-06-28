<?php require_once '../app/views/inc/header.php' ?>
<div class="row mb-4">
    <div class="col-md-8">
        <div class="flower-2"></div>
    </div>
    <div class="col-md-4">
        <div class="login-cover">
            <div class="card">
                <div class="card-header">
                    <div class="form-heading">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="login-logo"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="flower text-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form-submit" method="post">
                        <div class="form-group">
                            <input type="text" id="fname" class="form-control" name="fname" placeholder="আপোনাৰ ইমেইল" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="password" id="fname" class="form-control" name="fname" placeholder="আপোনাৰ পাচৱৰ্ড" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <button class="button" style="vertical-align:middle"><span>লগিন কৰক</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--    <h1>--><?php //echo $data['title'] ?><!--</h1>-->
<!--    <ul>-->
<!--        --><?php //foreach ($data['posts'] as $post ): ?>
<!--            <li>--><?php //echo $post->title ?><!--<br>-->
<!--                --><?php //echo $post->body ?>
<!--            </li>-->
<!--        --><?php //endforeach;?>
<!--    </ul>-->
</div>
<?php require_once '../app/views/inc/footer.php' ?>