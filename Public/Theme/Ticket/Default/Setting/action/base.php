<div class="am-panel am-panel-default">
    <div class="am-panel-bd">
        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">检查更新<i class="am-text-danger">*</i></label>
                    <a class="am-btn am-btn-sm am-btn-warning" href="<?= $label->url(GROUP . '-Setting-upgrade') ?>"><i class="am-icon-refresh"></i> <?= $version['value'] ?>
                    </a>
                </div>
            </div>
        </div>

        <hr class="am-margin-top-0 am-divider-default"/>
        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">网站URL<i class="am-text-danger">*</i></label>
                    <input name="domain" placeholder="网站URL" type="text" value="<?= $domain['value']; ?>" required="">
                    <div class="am-alert am-alert-secondary am-text-xs " data-am-alert>
                        <i class="am-icon-lightbulb-o"></i> 请填写正确的域名，以便工单能够正确地提交！域名需要带http或者https，按照服务器实际情况填写。
                    </div>
                </div>
            </div>
        </div>

        <hr class="am-margin-top-0 am-divider-default"/>
        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">域名白名单<i class="am-text-danger">*</i></label>
                    <textarea rows="5" name="crossdomain"><?= empty($crossdomain) ? '' : implode("\n", $crossdomain); ?></textarea>
                    <div class="am-alert am-alert-secondary am-text-xs " data-am-alert>
                        <i class="am-icon-lightbulb-o"></i> 默认情况下，所有请求可以正常提交工单，若指定域名白名单，请一行一个域名的形式填写
                    </div>
                </div>
            </div>
        </div>

        <hr class="am-margin-top-0 am-divider-default"/>
        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">开启首页<i class="am-text-danger">*</i></label>
                    <label class="am-radio-inline">
                        <input type="radio" value="1" name="openindex" required="" <?= $openindex['value'] == '1' ? 'checked="checked"' : '' ?>> 开启
                    </label>
                    <label class="am-radio-inline">
                        <input type="radio" value="0" name="openindex" required="" <?= $openindex['value'] == '0' ? 'checked="checked"' : '' ?>> 关闭
                    </label>
                    <div class="am-alert am-alert-secondary am-text-xs " data-am-alert>
                        <i class="am-icon-lightbulb-o"></i> 若允许所有人通过首页填写工单查询，那么请开启。反之用户直接访问首页名将报404错误。
                    </div>
                </div>
            </div>
        </div>

        <hr class="am-margin-top-0 am-divider-default"/>
        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">开放注册<i class="am-text-danger">*</i></label>
                    <label class="am-radio-inline">
                        <input type="radio" value="1" name="open_register" required="" <?= $open_register['value'] == '1' ? 'checked="checked"' : '' ?>> 开启
                    </label>
                    <label class="am-radio-inline">
                        <input type="radio" value="0" name="open_register" required="" <?= $open_register['value'] == '0' ? 'checked="checked"' : '' ?>> 关闭
                    </label>
                    <div class="am-alert am-alert-secondary am-text-xs " data-am-alert>
                        <i class="am-icon-lightbulb-o"></i> 关闭注册需要手动添加客户。(微信公众号登录注册不受影响)
                    </div>
                </div>
            </div>
        </div>


        <hr class="am-margin-top-0 am-divider-default"/>
        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">登录验证码<i class="am-text-danger">*</i></label>
                    <label class="am-checkbox-inline">
                        <input type="checkbox" value="1" name="login_verify[]"  <?= $login_verify['0'] == '1' ? 'checked="checked"' : '' ?>> 前台开启
                    </label>
                    <label class="am-checkbox-inline">
                        <input type="checkbox" value="2" name="login_verify[]"  <?= $login_verify['1'] == '2' ? 'checked="checked"' : '' ?>> 后台开启
                    </label>
                    <div class="am-alert am-alert-secondary am-text-xs " data-am-alert>
                        <i class="am-icon-lightbulb-o"></i> 前后台用户登录是否需要验证码
                    </div>
                </div>
            </div>
        </div>

        <hr class="am-margin-top-0 am-divider-default"/>
        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">上传图片格式</label>
                    <textarea name="upload_img"><?= implode(',', $upload_img) ?></textarea>

                    <div class="am-alert am-alert-secondary am-text-xs " data-am-alert>
                        <i class="am-icon-lightbulb-o"></i> 填写您要支持的图片格式，英文逗号分隔。
                    </div>
                </div>
            </div>
        </div>

        <div class="am-g am-g-collapse">
            <div class="am-u-sm-12 am-u-sm-centered">
                <div class="am-form-group">
                    <label class="am-block">上传文件格式</label>
                    <textarea name="upload_file"><?= implode(',', $upload_file) ?></textarea>

                    <div class="am-alert am-alert-secondary am-text-xs " data-am-alert>
                        <i class="am-icon-lightbulb-o"></i> 填写您要支持的文件格式，英文逗号分隔。
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>