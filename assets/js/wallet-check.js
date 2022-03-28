$(document).ready(function() {
    console.log("Wallet check loaded");
    setInterval(function(){
        var pubkey = $("#pubkey").text();
        var nft_collection = $(".nft-collection div").html();
        if (nft_collection) {
            $(".nft-detected").show();
            $(".nft-not-detect").hide();
            console.log("NFT detected");
        } else {
            $(".nft-detected").show();
            $(".nft-not-detect").hide();
            console.log("NFT not detected");
        }
    }, 5000);
});