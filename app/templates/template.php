<table class="border overflow-x-scroll rounded-lg">
    <caption class="caption-top">
        Medicamentos
    </caption>

    <thead>
        <tr class="border-yellow-500">
            <td class="p-3">#</td>
            <td class="p-3">Preview</td>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($posts->have_posts()) {
            $posts->the_post();
            echo '<tr>';
            echo '<td class="p-2">#2</td>';
            echo '<td class="p-2">
                        <div class="cursor-pointer">
                            <a>
                                <img class="max-w-full h-auto w-28 rounded-lg"
                                    src="https://plus.unsplash.com/premium_photo-1724668132059-480d6a34bbf4?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Post sobre' . get_the_title() . '" title="' . get_the_title() . '">
                            </a>
                            <span>'. get_the_content().'</span>
                        </div>
                    </td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>