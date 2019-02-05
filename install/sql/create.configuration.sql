CREATE TABLE cms_configuration
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    qname VARCHAR(255),
    value TEXT,
    properties TEXT,
    creation_date DATETIME,
    update_date DATETIME,
)