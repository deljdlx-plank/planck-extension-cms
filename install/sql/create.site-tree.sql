CREATE TABLE cms_sitetree
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,

    parent_id INT,
    leftbound INT,
    rightbound INT,
    depth INT,
    rank INT,

    status INT,

    slug VARCHAR(1024),
    path TEXT,
    name VARCHAR(1024),

    properties TEXT,

    creation_date DATETIME,
    update_date DATETIME
)