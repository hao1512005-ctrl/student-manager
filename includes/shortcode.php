<?php
if (!defined('ABSPATH')) exit;

function sm_shortcode() {
    $args = [
        'post_type' => 'sinh_vien',
        'posts_per_page' => -1
    ];

    $query = new WP_Query($args);

    if (!$query->have_posts()) return "<p>Không có sinh viên</p>";

    $output = '<table class="sm-table">';
    $output .= '<tr>
                    <th>STT</th>
                    <th>MSSV</th>
                    <th>Họ tên</th>
                    <th>Lớp</th>
                    <th>Ngày sinh</th>
                </tr>';

    $stt = 1;

    while ($query->have_posts()) {
        $query->the_post();

        $mssv = get_post_meta(get_the_ID(), '_mssv', true);
        $lop = get_post_meta(get_the_ID(), '_lop', true);
        $ngaysinh = get_post_meta(get_the_ID(), '_ngaysinh', true);

        $output .= "<tr>
                        <td>{$stt}</td>
                        <td>{$mssv}</td>
                        <td>" . get_the_title() . "</td>
                        <td>{$lop}</td>
                        <td>{$ngaysinh}</td>
                    </tr>";

        $stt++;
    }

    wp_reset_postdata();

    $output .= '</table>';

    return $output;
}
add_shortcode('danh_sach_sinh_vien', 'sm_shortcode');