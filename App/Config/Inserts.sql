INSERT INTO `product_category`

  (`code`, `name`) VALUES

('BAGS', 'Bags Category'),
('BADGES', 'Badges Category'),
('ACCESSOR', 'Clothing Accessories Category'),
('GADGETS', 'Gadgets Category'),
('LANYARDS', 'Lanyards and Accessories Category'),
('PACKAG', 'Packaging Category'),
('SAMPLES', 'Samples Picking Category'),
('SPECLPRJ', 'Special Projects Category'),
('CHRSTCAL', 'Calendars Category');


INSERT INTO `product_group`

(`code`, `name`, `prodcat`) VALUES

('NKA1CLA3', 'Classic Rope Handle Paper Bags', 'BAGS'),
('7A', 'Designer Luxury Rope Handle Paper Bags ', 'BAGS'),
('NKA1OVE3', 'Digital Twist Handle Paper Bags', 'BAGS'),
('NKA1GLOS', 'Gloss Twist Handle Bags ', 'BAGS'),
('7F', 'Spice Fabric Bags', 'BAGS'),
('NKA1BAGS', 'Uncoated Twist Handle Bags ', 'BAGS'),
('NKA1BUTT', ' Button Badges', 'BADGES'),
('NKA1SHOE', 'Shoe Laces ', 'ACCESSOR'),
('NKA1USBS', 'USB Sticks', 'GADGETS'),
('NKA1LAN1', 'Lanyard Card Holders Group', 'LANYARDS'),
('NKA1LANY', 'Lanyards', 'LANYARDS'),
('NKA1SAT1', 'Satin Ribbon', 'PACKAG'),
('NK', 'Kan samples', 'SAMPLES'),
('NKA1BESP	', ' works Hamble - Bespoke', 'SPECLPRJ'),
('NKA1CHOC', 'Chocolate Advent Calendars', 'CHRSTCAL');
