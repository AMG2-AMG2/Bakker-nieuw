
CREATE TABLE IF NOT EXISTS producten (
    id INTEGER PRIMARY KEY,
    naam TEXT NOT NULL,
    intro TEXT,
    afbeelding TEXT
);

INSERT INTO producten (naam, intro, afbeelding) VALUES
    ('Brood', 'Vers gebakken brood', 'brood.jpg'),
    ('Taart', 'Heerlijke taarten', 'taart.jpg'),
    ('Koekjes', 'Verse koekjes', 'koekjes.jpg'),
    ('Cupcakes', 'Lekkere cupcakes', 'cupcakes.jpg'),
    ('Donuts', 'Smakelijke donuts', 'donuts.jpg'),
    ('Muffins', 'Zachte muffins', 'muffins.jpg'),
    ('Pretzels', 'Knapperige pretzels', 'pretzels.jpg'),
    ('Brownies', 'Chocolade brownies', 'brownies.jpg'),
    ('Croissants', 'Verse croissants', 'croissants.jpg'),
    ('Appeltaart', 'Sappige appeltaart', 'appeltaart.jpg');
