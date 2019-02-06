CREATE TABLE cms_sitetree_element
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,

    sitetree_id INT,

    element_id INT,
    element_type VARCHAR(1024),
    element_type_id VARCHAR(1024),
    element_fingerprint TEXT,

    rank INT,
    status INT,

    slug VARCHAR(1024),
    path TEXT,

    properties TEXT,

    creation_date DATETIME,
    update_date DATETIME
)