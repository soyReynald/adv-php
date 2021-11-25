-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 01:22 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--
DROP DATABASE IF EXISTS `news`;
CREATE DATABASE IF NOT EXISTS `news` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `news`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `img` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `author`, `title`, `img`, `content`) VALUES
(5, 1, 'What happens when the Bering Sea\'s ice disappears?', '030219_arctic-sea_feat.jpg', 'From an anchored vantage point in an expanse of the southeastern Bering Sea west of Alaska, Peggy, or mooring M2, had monitored conditions in the water for 25 years. A line of sensors extended down more than 70 meters to where Peggy was tethered to the seafloor, collecting information on temperature, salinity and other properties of the water.'),
(6, 2, 'Poison toilet paper reveals how termites help rainforests resist drought', '010719_YHL_termite_NEW_feat.jpg', 'It took hundreds of teabags and thousands of rolls of toilet paper for tropical ecologist Kate Parr and her colleagues to demonstrate that termites help tropical rainforests resist drought. Forests with more termites show more soil moisture, leaf litter decomposition and seedling survival during a drought than forests with fewer termites, the scientists report January 10 in Science.'),
(7, 1, 'Oceans that are warming due to climate change yield fewer fish', '022719_CG_fisheries_feat.jpg', 'Finding the fish is going to get harder as climate change continues to heat up the world\'s oceans. Increasing ocean temperatures over 80 years have reduced the sustainable catch of 124 fish and shellfish species - the amount that can be harvested without doing long-term damage to the populations - by a global average of 4.1 percent, a new study finds.'),
(8, 1, 'Dueling dates for a huge eruption reignite the debate over dinosaurs\' death', '022119_CG_deccan-traps_feat.jpg', 'Which came first: the impact or the eruptions? That question is at the heart of two new studies in the Feb. 22 Science seeking to answer one of the most hotly debated questions in Earth\'s geologic history: Whether an asteroid impact or massive volcanism that altered the global climate was mostly to blame for the demise of all nonbird dinosaurs 66 million years ago.'),
(9, 1, 'The \'roof of the world\' was raised more recently than once thought', '030719_CG_tibetan-plateau_Feat.jpg', 'Plant fossils discovered in rocks from the Tibetan Plateau and a new analysis of the area\'s geochemistry are rewriting the uplift history of the region dubbed the \"roof of the world.\" This new research suggests that the story of the rise to its current dizzying height is far more complicated than just raising the roof.'),
(10, 3, 'Meet India\'s starry dwarf frog - a species with no close relatives', '031219_JR_frog_feat.jpg', 'A tiny new frog species discovered in tropical forests of southwest India has been one of a kind for millions of years.\r\n\r\nPalaniswamy Vijayakumar and his colleagues first spotted the new species one night in 2010 while surveying frogs and reptiles roughly 1,300 meters up in India\'s Western Ghats mountain range. The frog hardly stood out - its brown back, orange belly and starlike spots acted as camouflage against the dark hues and water droplets on the forest floor. And at only 2 to 2.9 centimeters long, \"it can sit on your thumb,\" says Vijayakumar, a biogeographer at George Washington University in Washington, D.C.'),
(11, 3, 'Tiny bits of iron may explain why some icebergs are green', '030419_JR_green-iceberg_feat.jpg', 'Scientists may have finally figured out why some icebergs are green. Iron oxides could create the emerald hue.\r\n\r\nIcebergs often appear mostly white because light bounces off air bubbles trapped inside the ice. But pure ice - ice without air bubbles that often forms on a berg\'s underside - appears blue because it absorbs longer light wavelengths (warm colors like red and orange) and reflects shorter ones (the cooler colors).'),
(12, 3, 'A new 2-D material uses light to quickly and safely purify water', '020619_JR_water-purifier_feat.jpg', 'Using light, a prototype \"green\" material can purify enough daily drinking water for four people in just one hour. In tests, it killed nearly 100 percent of bacteria in 10 liters of water, researchers report February 7 in Chem.\r\n\r\nThis new material, a 2-D sheet of graphitic carbon nitride, is a photocatalyst: It releases electrons when illuminated to create destructive oxygen-based chemicals that destroy microbes. The design avoids pitfalls of other similar technology. Today\'s most effective photocatalysts contain metals that can leach into water as toxic pollutants. Others are non-metallic, like the new 2-D sheets, but are less efficient because they hold onto electrons more tightly.'),
(13, 4, 'A new way to genetically tweak photosynthesis boosts plant growth', '010219_MT_GE-crops_feat.jpg', 'A genetic hack to make photosynthesis more efficient could be a boon for agricultural production, at least for some plants.\r\n\r\nThis feat of genetic engineering simplifies a complex, energy-expensive operation that many plants must perform during photosynthesis known as photorespiration. In field tests, genetically modifying tobacco in this way increased plant growth by over 40 percent. If it produces similar results in other crops, that could help farmers meet the food demands of a growing global population, researchers report in the Jan. 4 Science.'),
(14, 4, 'Why kids may be at risk from vinyl floors and fire-resistant couches', '021519_mt_indoor-pollution_feat_free.jpg', 'Home decor like furniture and flooring may not be notorious polluters like gas-guzzlers, but these indoor consumer products can also be significant sources of potentially dangerous chemicals.\r\n\r\nKids who live in homes with all vinyl flooring or living room couches that contain flame retardants have much higher concentrations of chemicals called semivolatile organic compounds in their blood and urine than other children. Researchers reported those results February 17 at the annual meeting of the American Association for the Advancement of Science.'),
(15, 4, 'People can sense Earth\'s magnetic field, brain waves suggest', '031519_MT_magnetic-sense_feat.jpg', 'A new analysis of people\'s brain waves when surrounded by different magnetic fields suggests that people have a \"sixth sense\" for magnetism.\r\n\r\nBirds, fish and some other creatures can sense Earth\'s magnetic field and use it for navigation (SN: 6/14/14, p. 10). Scientists have long wondered whether humans, too, boast this kind of magnetoreception. Now, by exposing people to an Earth-strength magnetic field pointed in different directions in the lab, researchers from the United States and Japan have discovered distinct brain wave patterns that occur in response to rotating the field in a certain way.'),
(16, 4, '50 years ago, doctors lamented a dearth of organ donors', '021319_mt_heart-donor_feat_free.jpg', 'Candidates for heart or other organ transplants still far outnumber donors. Every day, 20 people on average die while waiting for a transplant in the United States. Scientists hope to remedy the shortage using organs harvested from animals. To keep a human body from rejecting nonhuman cells, scientists are turning to gene editing (SN: 10/14/17, p. 26). So far, baboons given genetically modified pig hearts have survived for about six months (SN Online: 12/5/18). Others are growing organs, creating a sterilized scaffold from an animal or cadaver organ and repopulating the scaffold with the organ recipient\'s cells (SN: 5/18/13, p. 14). Pigs have survived several weeks after being implanted with lab-grown lungs (SN: 9/15/18, p. 8).'),
(17, 5, 'Brain-zapping implants that fight depression are inching closer to reality', '021619_mood-zap_feat.jpg', 'Like seismic sensors planted in quiet ground, hundreds of tiny electrodes rested in the outer layer of the 44-year-old woman\'s brain. These sensors, each slightly larger than a sesame seed, had been implanted under her skull to listen for the first rumblings of epileptic seizures.\r\n\r\nThe electrodes gave researchers unprecedented access to the patient\'s brain. With the woman\'s permission, scientists at the University of California, San Francisco began using those electrodes to do more than listen; they kicked off tiny electrical earthquakes at different spots in her brain.'),
(18, 5, 'Flickers and buzzes sweep mouse brains of Alzheimer\'s plaques', '031319_ls_alz_feat.jpg', 'Fast clicking sounds can boost brainpower in mice with signs of Alzheimer\'s disease. Like flickering lights, these external sounds spur a type of brain wave that seemed to sweep disease-related plaques from mice\'s brains, researchers report in the March 14 Cell.\r\n\r\nIt\'s too early to say whether the same sorts of flickers and clicks could help people with Alzheimer\'s. If so, the treatment would represent a fundamentally new way to target the neurodegenerative disease - with lights and sounds instead of drugs. '),
(19, 5, 'Strange brains offer a glimpse into the mind', '081818_book_feat_free.jpg', 'To understand the human brain, take note of the rare, the strange and the downright spooky. That\'s the premise of two new books, Unthinkable by science writer Helen Thomson and The Disordered Mind by neuroscientist Eric R. Kandel.\r\n\r\nBoth books describe people with minds that don\'t work the same way as everyone else\'s. These are people who are convinced that they are dead, for instance; people whose mental illnesses lead to incredible art; people whose memories have been stolen by dementia; people who don\'t forget anything. By scrutinizing these cases, the stories offer extreme examples of how the brain creates our realities.'),
(20, 4, 'Virtual reality therapy has real-life benefits for some mental disorders', '111018_VR_feat.jpg', 'Edwin adjusted his headset and gripped the game controller in both hands. He swallowed hard. The man had good reason to be nervous. He was about to enter a virtual environment tailor-made to get his heart pumping way more than any action-packed video game: a coffee shop full of people.\r\n\r\nDetermined to overcome his persistent fear that other people want to hurt him, Edwin had enrolled in a study of a new virtual reality therapy. The research aimed to help people with paranoia become more comfortable in public places. In this program, described in March in the Lancet Psychiatry, Edwin could visit a store or board a crowded bus.'),
(21, 5, 'Ripples race in the brain as memories are recalled', '030119_LS_brain-ripples_feat.jpg', 'Fast waves of activity ripple in the brain a half second before a person calls up a memory. The finding, published in the March 1 Science, hint that these brain waves might be a key part of a person\'s ability to remember.\r\n\r\nThe results come from a study of 14 people with epilepsy who had electrodes placed on their brains as part of their treatment. Those electrodes also allowed scientists to monitor neural activity while the people learned pairs of words.'),
(22, 5, 'How singing mice belt out duets', '022719_LS_singing-mice_feat.jpg', 'In the understory of Central American cloud forests, musical mice trill songs to one another. Now a study of the charismatic creatures reveals how their brains orchestrate these rapid-fire duets.\r\n\r\nThe results, published in the March 1 Science, show that the brains of singing mice split up the musical work. One brain system directs the patterns of notes that make up songs, while another coordinates duets with another mouse, which are carried out with split-second precision.'),
(23, 6, 'Geneticists push for a 5-year global ban on gene-edited babies', '031219_TS_gene-editing_feat.jpg', 'Eighteen researchers, including two CRISPR pioneers, are calling for a temporary ban on creating gene-edited babies.\r\n\r\n\"We call for a global moratorium on all clinical uses of human germline editing - that is, changing heritable DNA (in sperm, eggs or embryos) to make genetically modified children,\" the statement\'s cosigners, who come from seven countries, wrote in the March 14 Nature.'),
(24, 6, 'A CRISPR spin-off causes unintended typos in DNA', '030519_ti_base-editor_feat_free.jpg', 'Even the best editor sometimes introduces typos. That\'s true whether the editor is human or a version of the much-heralded gene-editing tool CRISPR.\r\n\r\nOne type of CRISPR gene editor that changes individual DNA bases, rather than cutting DNA, introduces more unwanted mutations than expected in mouse embryos and rice plants, researchers report. Those mistakes occurred in places where the tool wasn\'t supposed to make changes. Another tested base editor, however, didn\'t make the undesirable edits. The results were described in two studies published online February 28 in Science.'),
(25, 6, 'Genes might explain why dogs can\'t sniff out some people under stress', '022719_ti_fear-smell_feat_free.jpg', 'Trained police dogs couldn\'t recognize stressed-out people with a particular version of a gene that\'s involved in stress management, geneticist Francesco Sessa reported February 22 at the annual meeting of the American Academy of Forensic Sciences. The dogs had no trouble identifying the men and women volunteers when the people weren\'t under stress. The study may help explain why dogs can perform flawlessly in training, but have difficulty tracking people in real-world situations.'),
(26, 6, 'Eating a lot of fiber could improve some cancer treatments', '030119_TS_high-fiber_feat.jpg', 'Researchers looked at people with melanoma skin cancer who were getting a kind of immune therapy called PD-1 blockade or checkpoint inhibition (SN: 10/27/18, p. 16). Those who ate a high-fiber diet were five times as likely to have the therapy halt the growth of or shrink tumors as those on diets low in fiber, researchers reported February 27 in a news conference held by the American Association for Cancer Research.'),
(27, 6, 'In some cases, getting dengue may protect against Zika', '020619_TS_zika_feat.jpg', 'In a study of more than 1,400 people in the Pau da Lima area of Salvador, those with higher levels of antibodies against a particular dengue virus protein were at lower risk of contracting Zika, researchers report in the Feb. 8 Science. \"The higher the antibody, the higher the protection,\" says Albert Ko, an infectious disease physician and epidemiologist at the Yale School of Public Health.'),
(28, 6, 'Gene editing can speed up plant domestication', '092818_TI_ground-cherry_feat.jpg', 'Editing just two genes in ground cherries (Physalis pruinosa) produced plants that yielded more and bigger fruit, researchers report October 1 in Nature Plants. Those edits mimic changes that occurred in tomato plants during domestication, bringing the sweet tomato relative a step closer toward becoming a major berry crop, says study coauthor Zachary Lippman, a plant biologist at Cold Spring Harbor Laboratory in New York.'),
(29, 6, 'This bacteria-fighting protein also induces sleep', '013119_ti_healing-sleep_feat.jpg', 'A microbe-fighting protein helps control how much and how deeply fruit flies sleep, researchers report in the Feb. 1 Science. That\'s evidence that sleep speeds recovery from illness, they conclude.\r\n\r\n\"We finally have a very clear link between being sleepy and fighting an infection,\" says Caltech sleep researcher Grigorios Oikonomou, who was not involved in the work. Such a link has been hinted at but never formally demonstrated, says Oikonomou, who coauthored a commentary on the study in the same issue of Science.'),
(30, 7, 'Extreme elements push the boundaries of the periodic table', '030219_periodictable_main_alt.jpg', 'The rare radioactive substance made its way from the United States to Russia on a commercial flight in June 2009. Customs officers balked at accepting the package, which was ensconced in lead shielding and emblazoned with bold-faced warnings and the ominous trefoil symbols for ionizing radiation. Back it went across the Atlantic.'),
(31, 7, 'Physicists wrangled electrons into a quantum fractal', '110918_EC_fractal-geometry_feat_REV.jpg', 'Fractals are patterns that repeat themselves on different length scales:  Zoom in and the structure looks the same as it does from afar. They\'re common in the natural world. For instance, a cauliflower stalk looks like a miniature version of the full head. A lightning stroke splits into many branches, each of which has the same forked structure as the whole bolt.'),
(32, 7, 'Bizarre metals may help unlock mysteries of how Earth\'s magnetic field forms', '110518_EC_weyl-metals_feat.jpg', 'Weird materials called Weyl metals might reveal the secrets of how Earth gets its magnetic field.\r\n\r\nThe substances could generate a dynamo effect, the process by which a swirling, electrically conductive material creates a magnetic field, a team of scientists reports in the Oct. 26 Physical Review Letters.'),
(33, 7, 'A new hydrogen-rich compound may be a record-breaking superconductor', '090718_EC_superconductor_feat_REV_2.jpg', 'Superconductors are heating up, and a world record-holder may have just been dethroned.\r\n\r\nTwo studies report evidence of superconductivity - the transmission of electricity without resistance - at temperatures higher than seen before. The effect appears in compounds of lanthanum and hydrogen squeezed to extremely high pressures.'),
(34, 7, 'Scientists have chilled tiny electronics to a record low temperature', '030819_ec_nanocool_feat.jpg', 'Tiny electronic chips have been cooled to a record low temperature, dipping below a thousandth of a kelvin for the first time ever, scientists reported March 6 at a meeting of the American Physical Society.\r\n\r\nTo reach the frosty temperature, the scientists incorporated tiny bits of metal on the chip, which act like magnetic refrigerators. When scientists ramped magnetic fields up and down, those tiny refrigerators, made of the metal indium, helped cool the chip\'s electrons to about 420 microkelvin - less than half a thousandth of a kelvin.'),
(35, 7, 'Microwaved grapes make fireballs, and scientists now know why', '022819_ec_explodinggrape_feat.jpg', 'Here\'s a recipe for homemade plasma: Cut a grape in half, leaving the two sections connected at one end by the grape\'s thin skin. Heat the fruit in a microwave for a few seconds. Then, boom: From the grape erupts a small plasma fireball - a hot mixture of electrons and electrically charged atoms, or ions.'),
(36, 7, 'LIGO will be getting a quantum upgrade', '021519_ec_ligo_feat.jpg', 'A planned revamp of the Advanced Laser Interferometer Gravitational-Wave Observatory, LIGO, relies on finessing quantum techniques, LIGO scientists announced February 14. That $35 million upgrade could let scientists catch a gravitational wave every day, on average. LIGO\'s current tally of 11 gravitational wave events could be surpassed in a single week, LIGO researchers said in a news conference at the annual meeting of the American Association for the Advancement of Science.'),
(37, 7, 'Photons reveal a weird effect called the quantum pigeonhole paradox', '020719_EC_quantum_pigeonhole_feat.jpg', 'In keeping with a mathematical concept known as the pigeonhole principle, roosting pigeons have to cram together if there are more pigeons than spots available, with some birds sharing holes. But photons, or quantum particles of light, can violate that rule, according to an experiment reported in the Jan. 29 Proceedings of the National Academy of Sciences.');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

DROP TABLE IF EXISTS `writers`;
CREATE TABLE `writers` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `name`) VALUES
(1, 'Carolyn Gramling'),
(2, 'Yao-Hua Law'),
(3, 'Jeremy Rehm'),
(4, 'Maria Temming'),
(5, 'Laura Sanders'),
(6, 'Tina Hesman Saey'),
(7, 'Emely Conover');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `by` (`author`);
ALTER TABLE `articles` ADD FULLTEXT KEY `fulltext` (`title`,`content`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `writers` ADD FULLTEXT KEY `fulltext` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
