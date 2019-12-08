<?php

return [
    'alipay' => [
        'app_id'         => '2016081600255482',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxhKNDIPg8j2ilMPfQqKYI7ogIoe6IsKNmJB5+sxH0MDX6IM+XfJcGuGMSaOkAqZmf/4/C5AxEyg+WhlztQc1Vd6XRsEFRhOGMAisDXoUQyZgo6mu8SYUNiRsUnqUSCWv2k2766OdnlCMBf7cLEMN0Zc+rBHf+2cIevSpf0YrCWQuPCYoynaZRcUSCoplRD7+l/gTjZv6AYAslpyHtm+4eA5aB9gn6/kZtzJ7AXimHD9vQ5Gh2qNh6hwo7/dkhduygZ4beaSB89LHXrIh8vN7+o/h1AwiEzkkbguimFOl+9ZcN0YXw2xe/3JH+KUwX8iN8eADxcembMKYpths4BlUmQIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEA0aVKLeiMmKDNqnP7uxpUxGc27oH5O6Eqqk4AagBxrenBYy0En3hcZSryVCpCTLIklw+6+OaAOnFRv3KtBriYQf/+tWc55wg4CpyqIj3Uuk0tM0HhbQ+etZdgDHl/+FaBiLGODGu3oxn7atD30W/Lza1YygXnTzhl9gjOe4kPKxqHJ/bhCx7QVJNp2r967COMVXeEUe+/ZnUVj99KJOx6CEeDdiQzjaf+BZvVE7NB+jbu35L5WVSLQfjFoJy9FxkHQWcz1Ajnd0TBUp21jiWhppFX1MLF0N5oKMEXGTtXLHeZBFkaH6iDnrXkoEjwj3BkZV61PPvTfRk5A/siiT0PEQIDAQABAoIBAQCeHwMB+UIB5Fb61xvolQWWVRrzbYij1v0tEkPxr4AOYh6ARPYVqVxW2buIi48R9dLvNOgazw+sBMhZk465YQVF0mU0QTVE8cgDCQKxbN1D3u3WmTwDXCKiaBgDkKhakDSG+xRefeg11mTwvcgMaTvYV4R+a1F5SNpuZVoHhuqv4KX5GvssNx7zvha+lwT5F0grjRBkAQu1Xvia3YjyesIKmnJqL3wk38L2SnHiCulrZjg3Hpd7xG1J3yQHonmpTOKF1P8FhfT3umTOszNZO91lh/rg0yRDUF/ixxdhj7+4ePfCbUvAgV3hDqXHVhgE6MHNfbwAH5WVFhIf5en5YPx5AoGBAPh91mzTbskvUmXs8usu+RVVeltf73oWzJ5J6rmIQ0iHpDdsahw6c+54dmgNazBCPzxiULhrRt3ftvrfv9Qe+F/6rRHX5dc/gKD/Rf9Qb9XDCjP0Oiu38p0ZmRzu43N+V7GSZgPWIwJtsg/sqjqEoDjlyyENtN7f5NMDCq/b8nHLAoGBANf693cxyC/xCJJWslOkCS2D8cl9dHApD3Iy2rOklhxv/WrcQWWj/zRNMs7AIemu2rT6iR7Zlhkd3udmWfTZ47UXGmV3Emz8iBPj474XGWrOPCKZT7MJiTgvnQMpxzN3ozZYg9cf6ERYjI2f43NfV2llnxwqk6X2MVjOwQ915DcTAoGBAM3sSlOo63ghlSEOOUiYhqYdTeaHHAeK+Up7at8RguCKN5YOa+i0r/oBLe6QoDE/1POPbeFGVVXs3NANuARrHd07+Ux+I+Q6pbfFlBY+bE8y8DOZwtMT/yQdYHtPpIHDQ5zN+2hWfnC2wwbbUz5nRfegxrK/jxHbbN9I+ARAOyv9AoGAbzBBc/iJ8bxpyESfu5WIMAlsUWmnpxJMZGMv2inSKcOxt/C6LiRWfst7a5rYGqCs8VzFeL9VmYqaNZCooPgHVTQWn8PEFZ2QRIUeur7Tk/umU72PnUE8hlNkxrscVS+zM4gwH3DKt1zKxyJYCw47RwRM/EgjCN6Mmwadt2Le4UcCgYEA6AKTyIBjIRNwTlNSY0pS0WVCISKXhIs99Uxmv+AvI4AKknaRS0b6cDlsIt7LaBaZlmSGjaMMYaQeLF45qMysTJ05MCICsYJ1GEwDOGil3eDg50ydy59Tosx7APTrc3/t9YIbaR/0v2M/RTVe3R7WO3Glu8wFZgOfC8WJDdecCSk=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
