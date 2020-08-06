<div class="table-responsive">
    <table style="width: 100%; border: 1px solid #ddd; border-collapse: collapse;"
           class="table table-hover table-striped">
        <tbody>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Имя</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $model->name; ?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Компания</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $model->company; ?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">E-mail</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $model->email; ?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Тема</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $model->subject; ?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Сообщение</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $model->body; ?></td>
        </tr>
        </tbody>
    </table>

</div>
