import React from "react";
import MainBanner from "../components/MainBanner";
import HappeningAtSOA from "../components/HappeningAtSOA";
import PublicationsHomepage from "../components/PublicationsHomepage";
import ExhibitionsHomepage from "../components/ExhibitionsHomepage";
import CommunityBulletin from "../components/CommunityBulletin";
import NewsLetter from "../components/Newsletters";

const Homepage = () => {
  const slug = "homepage";

  return (
    <>
      <main className="homepage">
        <MainBanner slug={slug} />
        <HappeningAtSOA slug={slug} />
        <PublicationsHomepage slug={slug} />
        <ExhibitionsHomepage slug={slug} />
        <CommunityBulletin slug={slug} />
        <NewsLetter />
      </main>
    </>
  );
};
export default Homepage;
