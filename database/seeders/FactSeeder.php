<?php

namespace Database\Seeders;

use App\Models\Fact;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'Playing cards were first invented in Imperial China.',
                'slug' => 'playing-cards-were-first-invented-in-imperial-china',
                'description' => 'The origin of playing cards can be traced back to the Tang dynasty in the 9th century AD in China. From there, they spread to India, Persia and Egypt and then arrived in Europe where they saw much of their modern evolution. It’s a hearty leap from these first card concepts to the modern deck, but everything has to start somewhere!',
                'tags' => ' play, cards, china',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'The French devised the suits of hearts, diamonds, clubs, and spades.',
                'slug' => 'the-french-devised-the-suits-of-hearts-diamonds-clubs-and-spades',
                'description' => 'Around 1480, France introduced these now-iconic symbols. Before this, various cultures used different symbols like swords, coins, polo sticks and cups, making today\'s standard deck a true blend of history and culture.',
                'tags' => ' play, cards, french',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'The "Dead Man\'s Hand" is a legendary poker hand, and it’s history is a bit dark.',
                'slug' => 'the-dead-mans-hand-is-a-legendary-poker-hand-and-its-history-is-a-bit-dark',
                'description' => 'Consisting of a two-pair hand of black aces and eights, this hand is shrouded in infamy. It was supposedly held by Old West outlaw Wild Bill Hickok when he met his demise, turning this decent hand into a symbol of foreboding fate.',
                'tags' => ' history, card, poker',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'The Joker card has its roots in the game of Euchre.',
                'slug' => 'the-joker-card-has-its-roots-in-the-game-of-euchre',
                'description' => 'Introduced in the 1860s, the Joker was initially called the ‘Best Bower’ in the game of Euchre (pronounced: yoo-ker). From this game-specific addition, it evolved into the wild card we know today, often bringing an unpredictable twist to other card games like poker.',
                'tags' => ' play, card, joker',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'The "Venexiana Gold" deck is the most expensive one ever made.',
                'slug' => 'the-venexiana-gold-deck-is-the-most-expensive-one-ever-made',
                'description' => 'Crafted with gold leaf and intricate designs by Lotrek, this deck is a collector\'s dream. Only 212 decks were made, each selling for about $500. That\'s some serious bling for what is essentially a commodity today (available for around $4 at a convenience store near you).',
                'tags' => ' play, cards, china',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'Tarot cards were originally used for playing games.',
                'slug' => 'tarot-cards-were-originally-used-for-playing-games',
                'description' => '<p> Before they became synonymous with fortune-telling, tarot cards were used as playing cards in 15th-century Europe. Due to the mysterious images and mystical themes, it is no wonder it transitioned to something a bit less gamified.</p> <p> A standard deck of cards is a calendar in disguise. There are 52 cards in a standard deck, which some believe represents the 52 weeks in a year. Additionally, if you add up all the symbols in a deck, the total is 365, mirroring the number of days in a year.</p>',
                'tags' => ' play, cards, tarot',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'The largest collection of playing card decks is over 11,000 sets.',
                'slug' => 'the-largest-collection-of-playing-card-decks-is-over-11000-sets',
                'description' => 'Held by Liu Fuchang of China, this collection is a testament to the diverse and captivating designs that have been created over the years. It’s also represents the human affinity for collecting random things.',
                'tags' => ' play, cards, china',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'The oldest surviving deck of cards lives in New York.',
                'slug' => 'the-oldest-surviving-deck-of-cards-lives-in-new-york',
                'description' => 'This deck is from the mid-15th century and originates from the Netherlands. It’s gorgeous, hand-painted and was clearly hardly played. It now sits pretty at the Metropolitan Museum of Art in NYC, who purchased it for their collection in 1971 for an affordable $143,000.',
                'tags' => ' play, cards, new york',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'Karnöffel is the oldest known card game.',
                'slug' => 'karnoffel-is-the-oldest-known-card-game',
                'description' => 'Played since the 15th century in Europe, this game originated in Bavaria and is still played today by avid historical gamers throughout Europe, especially in Germany and Switzerland. If you’d like to learn how to play,',
                'tags' => ' play, card, china',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'The world\'s tiniest playing cards are a marvel of miniaturization.',
                'slug' => 'the-worlds-tiniest-playing-cards-are-a-marvel-of-miniaturization',
                'description' => 'Produced by the United States Playing Card Company, these cards measure just 0.5 x 0.75 inches. Perfect for mice I guess? It was probably more of a “can we do it” situation rather than a “we need this” situation.',
                'tags' => ' play, cards, tiny',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'The Kings in a deck of cards are said to represent historical figures.',
                'slug' => 'the-kings-in-a-deck-of-cards-are-said-to-represent-historical-figures',
                'description' => 'History buffs claim the kings of hearts, clubs, diamonds, and spades represent Charlemagne, Alexander the Great, Julius Caesar, and King David, respectively. There are often subtle clues in modern card designs that point to these kingly identities. Digging deeper, the queen of spades is said to be the Greek goddess Pallas Athena, and the Jack of Clubs is Lancelot du Lac. Can you spot them?',
                'tags' => ' play, cards, king',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'The longest poker game lasted over 8 years.',
                'slug' => 'the-longest-poker-game-lasted-over-8-years',
                'description' => 'Taking place at the Bird Cage Theatre in Arizona in 1881, this game was a marathon of strategy and endurance. Also an exercise in patience, dedication and perhaps boredom.',
                'tags' => ' play, cards, longest',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'UNO was created by an Ohio barber in 1971.',
                'slug' => 'uno-was-created-by-an-ohio-barber-in-1971',
                'description' => 'Merle Robbins invented UNO to settle a family argument about Crazy Eights. The year was 1971, and as we learned from our other fun fact, this was a big year for cards. The UNO invention happened in a suburb of Cincinnati (this writer\'s home-town!), and he originally paid $8,000 to make 5,000 copies that he sold from his humble hair salon.',
                'tags' => ' play, uno, inventor',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'Waterproof playing cards exist, and that’s pretty cool.',
                'slug' => 'waterproof-playing-cards-exist-and-thats-pretty-cool',
                'description' => 'Made from plastic or coated with waterproof material, these cards are perfect for a splashy game by the pool, beach or more dramatically, aboard Navy vessels and loved by service members of all stripes.',
                'tags' => ' play, cards, waterproof',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'Vegas Casinos go through cards… fast.',
                'slug' => 'vegas-casinos-go-through-cards-fast',
                'description' => 'Not known for sustainability, Vegas casinos go through decks of cards faster than you change your underwear. Most decks will last no longer than 12 hours, sometimes decks are discarded after only a half hour. This is to prevent detectible marks or scuffs from forming and giving players an advantage. The house always wins!',
                'tags' => ' casino, cards, vegas',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'Most sets of cards are made by one company: USPCC.',
                'slug' => 'most-sets-of-cards-are-made-by-one-company-uspcc',
                'description' => 'We call this a monopoly (not the board game), but for whatever reason, it isn’t enforced much in the USA these days (we’re kidding, we know the reason). Anywho, this card making giant is called the United States Playing Card Company and they are the largest manufacturers of cards in the world. They have a boatload of other brands under their umbrella that you might know, including: Aviator, Bee, Tally-Ho and the big-daddy: Bicycle.',
                'tags' => ' USPCC, cards, made',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];

        Fact::insert($data);
    }
}
