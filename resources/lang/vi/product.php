<?php

return [
    'id'                    => 'ID',
    'sku'                   => 'Mã hàng',
    'alias'                 => 'URL tùy chỉnh',
    'sku_validate'          => 'Chỉ sử dụng kí tự trong nhóm: "A-Z", "a-z", "0-9" and "-_" ',
    'alias_validate'        => 'Tối đa 100 kí tự trong nhóm: "A-Z", "a-z", "0-9" and "-_" ',
    'price'                 => 'Giá bán',
    'price_promotion'       => 'Giá khuyến mãi',
    'price_promotion_start' => 'Ngày bắt đầu',
    'price_promotion_end'   => 'Ngày kết thúc',
    'quantity'              => 'Số lượng',
    'total_price'           => 'Tổng số tiền',
    'attribute'             => 'Thuộc tính',
    'add_product'           => 'Thêm sản phẩm',
    'edit_product'          => 'Chỉnh sửa sản phẩm',
    'category'              => 'Danh mục',
    'cost'                  => 'Giá cost',
    'stock'                 => 'Số lượng',
    'name'                  => 'Tên',
    'keyword'               => 'Từ khóa',
    'description'           => 'Mô tả',
    'content'               => 'Chi tiết',
    'type'                  => 'Loại',
    'kind'                  => 'Kiểu',
    'virtual'               => 'Sản phẩm ảo',
    'view'                  => 'Lượt xem',
    'sold'                  => 'Đã bán',
    'image'                 => 'Hình ảnh',
    'status'                => 'Trạng thái',
    'sort'                  => 'Sắp xếp',
    'import_multi'          => 'Import nhiều sản phẩm',
    'new'                   => 'Mới',
    'sale'                  => 'Sale',
    'brand'                 => 'Nhãn hiệu',
    'vendor'                => 'Nhà cung cấp',
    'availability'          => 'Tình trạng',
    'date_available'        => 'Thời gian bán',
    'in_stock'              => 'Còn hàng',
    'out_stock'             => 'Hết hàng',
    'overview'              => 'Mô tả',
    'comment'               => 'Đánh giá',
    'price_group'           => 'Bấm xem giá',
    'groups'                => 'Nhóm sản phẩm',
    'builds'                => 'Bộ sản phẩm',

    'admin'                 => [
        'title'                   => 'Quản lý sản phẩm',
        'create_success'          => 'Tạo item thành công!',
        'edit_success'            => 'chỉnh sửa item thành công!',
        'list'                    => 'Danh sách sản phẩm',
        'action'                  => 'Hành động',
        'delete'                  => 'Xóa',
        'edit'                    => 'Sửa',
        'add_new'                 => 'Thêm mới',
        'add_new_title'           => 'Tạo sản phẩm',
        'add_new_des'             => 'Tạo mới một sản phẩm',
        'export'                  => 'Xuất',
        'refresh'                 => 'Làm mới',
        'select_kind'             => 'Chọn loại sản phẩm',
        'result_item'             => 'Showing <b>:item_from</b> to <b>:item_to</b> of <b>:item_total</b> items</b>',
        'sort'                    => 'Sắp xếp',
        'select_category'         => 'Chọn danh mục',
        'select_product_in_group' => 'Chọn sản phẩm trong nhóm',
        'select_product_in_build' => 'Chọn sản phẩm trong bộ',
        'add_product'             => 'Thêm sản phẩm',
        'add_attribute'           => 'Thêm thuộc tính',
        'add_attribute_place'     => 'Nhập một thuộc tính',
        'add_sub_image'           => 'Thêm ảnh',
        'add_product_promotion'   => 'Thêm giá khuyến mãi',
        'choose_image'            => 'Chọn hình',

        'sort_order'              => [
            'id_asc'     => 'ID asc',
            'id_desc'    => 'ID desc',
            'name_asc'   => 'Tên a-z',
            'name_desc'  => 'Tên z-a',
            'sku_asc'    => 'SKU a-z',
            'sku_desc'   => 'SKU z-a',
            'price_asc'  => 'Giá a-z',
            'price_desc' => 'Giá z-a',
            'view_desc' => 'Lượt xem giảm',
            'view_asc' => 'Lượt xem tăng',
            'sold_desc' => 'Bán ra giảm',
            'sold_asc' => 'Bán ra tăng',                         
        ],
        'search'                  => 'Tìm kiếm',
        'search_place'            => 'Tìm tên, SKU hoặc ID sản phẩm',
        'cant_remove_child'       =>'Vui lòng gỡ bỏ những sản phẩm sau khỏi Group hoặc Build trước khi xóa chúng',
        'search_order'            => [
            'status' => 'Tất cả trạng thái',
        ],
    ],
    'types'                 => [
        'normal' => 'Bình thường',
        'new'    => 'Mới',
        'hot'    => 'Hot',
    ],
    'kinds'                 => [
        'single' => 'Sản phẩm đơn',
        'build'  => 'Bộ sản phẩm',
        'group'  => 'Nhóm sản phẩm',
    ],
    'virtuals'              => [
        'physical'  => 'Vật lý',
        'download'  => 'Tải xuống',
        'only_view' => 'Chỉ xem',
        'service'   => 'Dịch vụ',
    ],
];
